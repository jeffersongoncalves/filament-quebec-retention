<?php

use Illuminate\Support\Facades\DB;
use JeffersonGoncalves\Filament\QuebecRetention\QuebecRetentionPlugin;
use JeffersonGoncalves\Filament\QuebecRetention\Resources\Tombstones\Pages\ListTombstones;
use JeffersonGoncalves\Filament\QuebecRetention\Resources\Tombstones\TombstoneResource;
use JeffersonGoncalves\Filament\QuebecRetention\Tests\Fixtures\Customer;
use JeffersonGoncalves\Filament\QuebecRetention\Tests\Fixtures\TestUser;
use JeffersonGoncalves\QuebecRetention\Models\Tombstone;
use Livewire\Livewire;

beforeEach(function () {
    $this->actingAs(TestUser::create(['name' => 'Admin', 'email' => 'admin@example.com']));
    $this->customer = Customer::create(['name' => 'Maria', 'email' => 'maria@example.com']);
    $this->travel(13)->months();
});

it('previews without touching anything', function () {
    Livewire::test(ListTombstones::class)
        ->callAction('preview')
        ->assertNotified('1 record(s) would be anonymized now.');

    expect($this->customer->fresh()->name)->toBe('Maria')
        ->and(Tombstone::count())->toBe(0);
});

it('applies retention and lists the tombstones', function () {
    Livewire::test(ListTombstones::class)
        ->callAction('apply')
        ->assertNotified('1 record(s) anonymized.');

    expect($this->customer->fresh()->name)->toBe('M****');

    Livewire::test(ListTombstones::class)
        ->assertCanSeeTableRecords(Tombstone::all())
        ->assertSee('Customer')
        ->filterTable('column', 'email')
        ->assertCanSeeTableRecords(Tombstone::where('column', 'email')->get())
        ->assertCanNotSeeTableRecords(Tombstone::where('column', 'name')->get());
});

it('re-applies erasure after a backup restore', function () {
    Livewire::test(ListTombstones::class)->callAction('apply');
    DB::table('customers')->update(['name' => 'Maria', 'email' => 'maria@example.com']);

    Livewire::test(ListTombstones::class)
        ->callAction('reapply')
        ->assertNotified('2 column(s) anonymized again.');

    expect($this->customer->fresh()->name)->toBe('M****');
});

it('is read-only and applies the fluent plugin options', function () {
    QuebecRetentionPlugin::get()->navigationGroup('QUEBEC')->slug('retention');

    expect(TombstoneResource::canCreate())->toBeFalse()
        ->and(TombstoneResource::getPages())->toHaveKeys(['index'])
        ->and(TombstoneResource::getNavigationGroup())->toBe('QUEBEC')
        ->and(TombstoneResource::getSlug())->toBe('retention')
        ->and(TombstoneResource::getNavigationLabel())->toBe('Data retention');
});
