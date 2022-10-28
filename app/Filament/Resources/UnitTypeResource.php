<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UnitTypeResource\Pages;
use App\Filament\Resources\UnitTypeResource\RelationManagers;
use App\Models\UnitType;
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

class UnitTypeResource extends Resource
{
    protected static ?string $model = UnitType::class;

    protected static ?string $navigationGroup = 'System Management';

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    TextInput::make('unit_room_type')
                    ->reactive()
                    ->afterStateUpdated(function (Closure $set, $state) {
                        $set('slug', Str::slug($state));
                    })->required(),
                    TextInput::make('slug')->required(),
                    TextInput::make('unit_room_type_price')->required(),
                    RichEditor::make('unit_room_type_content')->required(),
                    FileUpload::make('unit_room_type_image')->image(),
                    Toggle::make('is_active'),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('unit_room_type')->sortable()->searchable(),
                TextColumn::make('slug')->sortable()->searchable(),
                TextColumn::make('unit_room_type_price')->limit(50)->sortable()->searchable(),
                BooleanColumn::make('is_active')->searchable(),
                ImageColumn::make('unit_room_type_image')->size(80),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListUnitTypes::route('/'),
            'create' => Pages\CreateUnitType::route('/create'),
            'edit' => Pages\EditUnitType::route('/{record}/edit'),
        ];
    }    
}
