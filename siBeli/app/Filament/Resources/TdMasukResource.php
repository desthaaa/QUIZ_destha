<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TdMasukResource\Pages;
use App\Filament\Resources\TdMasukResource\RelationManagers;
use App\Models\TdMasuk;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TdMasukResource extends Resource
{
    protected static ?string $model = TdMasuk::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('idMasuk')
                ->label('Id Masuk')
                ->required()
                ->numeric()
                ->maxLength(5),
                Forms\Components\TextInput::make('kdMasuk')
                ->label('Kode Masuk')
                ->required()
                ->maxLength(10),
                Forms\Components\TextInput::make('kdBarangBeli')
                ->label('Kode Barang Beli')
                ->required()
                ->maxlength(7),
                Forms\Components\TextInput::make('jumlah')
                ->label('Jumlah')
                ->required()
                ->numeric()
                ->maxlength(3),
                Forms\Components\TextInput::make('subtotal')
                ->label('Subtotal')
                ->required()
                ->numeric()
                ->maxlength(5),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('idMasuk')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('kdMasuk')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('kdBarangBeli')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('jumlah')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('subtotal')->sortable()->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ListTdMasuks::route('/'),
            'create' => Pages\CreateTdMasuk::route('/create'),
            'edit' => Pages\EditTdMasuk::route('/{record}/edit'),
        ];
    }
}
