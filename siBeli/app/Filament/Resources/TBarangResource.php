<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TBarangResource\Pages;
use App\Filament\Resources\TBarangResource\RelationManagers;
use App\Models\TBarang;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TBarangResource extends Resource
{
    protected static ?string $model = TBarang::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('satuan')
                ->label('satuan')
                ->required()
                ->maxLength(3),
                Forms\Components\TextInput::make('namaBarang')
                ->label('Nama Barang')
                ->required()
                ->maxLength(20),
                Forms\Components\TextInput::make('kdBarang')
                ->label('Kode Barang')
                ->required()
                ->maxlength(5),
                Forms\Components\TextInput::make('hargaJual')
                ->label('Harga Jual')
                ->required()
                ->numeric()
                ->maxlength(8),
                Forms\Components\TextInput::make('hargaBeli')
                ->label('Harga Beli')
                ->required()
                ->numeric()
                ->maxlength(8),
                Forms\Components\TextInput::make('stok')
                ->label('stok')
                ->required()
                ->numeric()
                ->maxlength(8),
                Forms\Components\TextInput::make('status')
                ->label('status')
                ->required()
                ->maxlength(10),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('satuan')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('namaBarang')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('kdBarang')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('hargaJual')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('hargaBeli')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('stok')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('status')->sortable()->searchable(),
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
            'index' => Pages\ListTBarangs::route('/'),
            'create' => Pages\CreateTBarang::route('/create'),
            'edit' => Pages\EditTBarang::route('/{record}/edit'),
        ];
    }
}
