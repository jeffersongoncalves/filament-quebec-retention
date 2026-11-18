<?php

namespace JeffersonGoncalves\Filament\QuebecRetention\Resources\Tombstones\Pages;

use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ListRecords;
use JeffersonGoncalves\Filament\QuebecRetention\Resources\Tombstones\TombstoneResource;
use JeffersonGoncalves\QuebecRetention\RetentionManager;

class ListTombstones extends ListRecords
{
    protected static string $resource = TombstoneResource::class;

    public function getTitle(): string
    {
        return __('filament-quebec-retention::filament-quebec-retention.navigation_label');
    }

    protected function getHeaderActions(): array
    {
        return [
            Action::make('preview')
                ->label(__('filament-quebec-retention::filament-quebec-retention.actions.preview.label'))
                ->icon('heroicon-o-eye')
                ->color('gray')
                ->action(fn () => $this->report(app(RetentionManager::class)->apply(dryRun: true), 'preview')),
            Action::make('apply')
                ->label(__('filament-quebec-retention::filament-quebec-retention.actions.apply.label'))
                ->icon('heroicon-o-trash')
                ->color('danger')
                ->requiresConfirmation()
                ->modalDescription(__('filament-quebec-retention::filament-quebec-retention.actions.apply.description'))
                ->action(fn () => $this->report(app(RetentionManager::class)->apply(), 'apply')),
            Action::make('reapply')
                ->label(__('filament-quebec-retention::filament-quebec-retention.actions.reapply.label'))
                ->icon('heroicon-o-arrow-path')
                ->color('warning')
                ->requiresConfirmation()
                ->modalDescription(__('filament-quebec-retention::filament-quebec-retention.actions.reapply.description'))
                ->action(function (): void {
                    Notification::make()
                        ->success()
                        ->title(__('filament-quebec-retention::filament-quebec-retention.actions.reapply.success', [
                            'count' => app(RetentionManager::class)->reapply(),
                        ]))
                        ->send();
                }),
        ];
    }

    /**
     * One line per model column that has (or would have) records anonymized.
     *
     * @param  list<array{model: class-string, column: string, retention: string, records: int}>  $report
     */
    protected function report(array $report, string $action): void
    {
        $lines = collect($report)
            ->filter(fn (array $row): bool => $row['records'] > 0)
            ->map(fn (array $row): string => e(class_basename($row['model']).".{$row['column']} ({$row['retention']}): {$row['records']}"));

        Notification::make()
            ->success()
            ->title(__("filament-quebec-retention::filament-quebec-retention.actions.{$action}.success", [
                'count' => collect($report)->unique(fn (array $row): string => $row['model'].$row['retention'])->sum('records'),
            ]))
            ->body($lines->isEmpty() ? null : $lines->implode('<br>'))
            ->send();
    }
}
