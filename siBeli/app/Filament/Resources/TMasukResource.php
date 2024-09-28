<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TMasukResource\Pages;
use App\Filament\Resources\TMasukResource\RelationManagers;
use App\Models\TMasuk;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TMasukResource extends Resource
{
    protected static ?string $model = TMasuk::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kdSupplier')
                ->label('Kode Supplier')
                ->required()
                ->maxLength(7),
                Forms\Components\DatePicker::make('tglMasuk')
                ->label('Tanggal Masuk')
                ->required(),
                Forms\Components\TextInput::make('kdAdmin')
                ->label('Kode Admin')
                ->required()
                ->numeric()
                ->maxlength(3),
                Forms\Components\TextInput::make('kdMasuk')
                ->label('Kode Masuk')
                ->required()
                ->maxlength(10),
                Forms\Components\TextInput::make('totalMasuk')
                ->label('Total Masuk')
                ->required()
                ->maxlength(10),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kdSupplier')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('tglMasuk')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('kdAdmin')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('kdMasuk')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('totalMasuk')->sortable()->searchable(),
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
            'index' => Pages\ListTMasuks::route('/'),
            'create' => Pages\CreateTMasuk::route('/create'),
            'edit' => Pages\EditTMasuk::route('/{record}/edit'),
        ];
    }
}
