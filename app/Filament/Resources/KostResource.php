<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KostResource\Pages;
use App\Filament\Resources\KostResource\RelationManagers;
use App\Models\Kost;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KostResource extends Resource
{
    protected static ?string $model = Kost::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                 Fieldset::make('Details')
                ->schema([

                    TextInput::make('name')
                    ->required()
                    ->maxLength(255),

                    TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('IDR'),

                    FileUpload::make('thumbnail')
                    ->image()
                    ->required(),

                    Repeater::make('photos')
                    ->relationship('photos')
                    ->schema([
                        FileUpload::make('photo')
                        ->required(),
                    ]),

                ]),

                Fieldset::make('Additional')
                ->schema([

                    Textarea::make('about')
                    ->required(),

                    Select::make('is_popular')
                    ->options([
                        true => 'Popular',
                        false => 'Not Popular',
                    ])
                    ->required(),

                    Select::make('category_id')
                    ->relationship('category', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),

                    Select::make('location_id')
                    ->relationship('location', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),

                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                ->searchable(),

                TextColumn::make('category.name'),

                ImageColumn::make('thumbnail'),

                TextColumn::make('price'),

                IconColumn::make('is_popular')
                ->boolean()
                ->trueColor('success')
                ->falseColor('danger')
                ->trueIcon('heroicon-o-check-circle')
                ->falseIcon('heroicon-o-x-circle')
                ->label('Popular'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListKosts::route('/'),
            'create' => Pages\CreateKost::route('/create'),
            'edit' => Pages\EditKost::route('/{record}/edit'),
        ];
    }
}
