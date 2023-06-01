<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VocherResource\Pages;
use App\Filament\Resources\VocherResource\RelationManagers;
use App\Models\Vocher;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VocherResource extends Resource
{
    protected static ?string $model = Vocher::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('code')
                    ->required(),
                Forms\Components\TextInput::make('discount_percent')
                    ->numeric()
                    ->required()
                    ->maxLength(100)
                    ->minLength(0)
                    ->label('Discount (%)'),
                Forms\Components\Select::make('product_id')
                    ->relationship('product', 'name')
                    ->required()
                    ->searchable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('code'),
                Tables\Columns\TextColumn::make('discount_percent')->label('Discount (%)'),
                Tables\Columns\TextColumn::make('product.name'),
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
            'index' => Pages\ListVochers::route('/'),
            'create' => Pages\CreateVocher::route('/create'),
            'edit' => Pages\EditVocher::route('/{record}/edit'),
        ];
    }
}
