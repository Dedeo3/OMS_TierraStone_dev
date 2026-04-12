<?php

namespace App\Filament\Admin\Resources\Users\Pages;

use App\Filament\Admin\Resources\Users\UserResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $data['role'] = $this->record->getRoleNames()->first();
        return $data;
    }

    protected function afterSave(): void
    {
        $role = $this->data['role'];
        $this->record->syncRoles([$role]);
    }

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make()
                ->before(function ($action) {
                    $record = $this->record;

                    // Proteksi admin utama
                    if ($record->email === 'admin@admin.com') {
                        Notification::make()
                            ->title('Tidak bisa dihapus')
                            ->body('Akun admin utama tidak dapat dihapus.')
                            ->danger()
                            ->send();
                        $action->halt();
                        return;
                    }

                    if ($record->orders()->exists()) {
                        Notification::make()
                            ->title('Tidak bisa dihapus')
                            ->body('User ini memiliki order yang tercatat dalam sistem.')
                            ->danger()
                            ->send();
                        $action->halt();
                    }
                }),
        ];
    }
}
