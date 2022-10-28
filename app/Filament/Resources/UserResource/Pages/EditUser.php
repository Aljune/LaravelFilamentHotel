<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Pages\Actions\Action;
use Filament\Pages\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
// use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\TextInput;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;
// use App\Filament\Resources\UserResources\Pages\Hash;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function getActions(): array
    {
        return [
            DeleteAction::make(),
            Action::make('changePassword')
            ->form([
                TextInput::make('new_password')
                    ->password()
                    ->label('New Password')
                    ->required()
                    ->rule(Password::default()),
                TextInput::make('new_password_confirmation')
                    ->password()
                    ->label('Confirm New Password')
                    ->required()
                    ->same('new_password')
                    ->rule(Password::default()),
            ])
            ->action(function(array $data) {
                $this->record->update([
                    'password' => Hash::make($data['new_password'])
                ]);
                $this->notify('success', 'Password Updated Successfully');
            })
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    
}
