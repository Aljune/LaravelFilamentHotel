<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\TextInput;
use Illuminate\Support\Str;
use Closure;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\BooleanColumn;
use Illuminate\Database\Eloquent\Model;

use Filament\Pages\Actions\Action;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;
use Filament\Facades\Filament;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationGroup = 'User Management';

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    TextInput::make('name')->required(),
                    TextInput::make('email')->email()->required(),
                    TextInput::make('password')->password()->dehydrateStateUsing(fn ($state) => Hash::make($state))->dehydrated(fn ($state) => filled($state))->label('Password')->required()->rule(Password::default()),
                    TextInput::make('password_confirmation')->password()->label('Confirm Password')->required()->same('password')->rule(Password::default()),
                ])->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // TextColumn::make('id')->label('ID')->sortable(),
                TextColumn::make('name')->sortable()->sortable(),
                TextColumn::make('email')->sortable()->sortable(),
                TextColumn::make('created_at')->sortable()->date('F j Y')->sortable(),
            ])
            ->defaultSort('id', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('changePassword')
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
                ->action(function(User $record,  array $data) {
                    $record->update([
                        'password' => Hash::make($data['new_password'])
                    ]);
                    Filament::notify('success', 'Password Updated Successfully');
                })
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }    

    // public static function canCreate(): bool
    // {
    //     return false;
    // }

    // public static function canDelete(Model $record): bool
    // {
    //     return false;
    // }
    // public static function canDeleteAny(): bool
    // {
    //     return false;
    // }

}
