<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\BarangMasukResource\Pages;
use App\Models\BarangMasuk;
use App\Models\Barang;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class BarangMasukResource extends Resource
{
    protected static ?string $model = BarangMasuk::class;
    protected static ?string $navigationIcon = 'heroicon-o-arrow-down-tray';
    protected static ?string $navigationLabel = 'Barang Masuk';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('barang_id')
                    ->label('Nama Barang')
                    ->relationship('barang', 'nama')
                    ->required(),

                Forms\Components\TextInput::make('jumlah_masuk')
                    ->numeric()
                    ->required()
                    ->label('Jumlah Masuk'),

                Forms\Components\DatePicker::make('tanggal_masuk')
                    ->required()
                    ->label('Tanggal Masuk'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('barang.nama')->label('Nama Barang'),
                Tables\Columns\TextColumn::make('jumlah_masuk')->label('Jumlah Masuk'),
                Tables\Columns\TextColumn::make('tanggal_masuk')->label('Tanggal Masuk'),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBarangMasuks::route('/'),
            'create' => Pages\CreateBarangMasuk::route('/create'),
            'edit' => Pages\EditBarangMasuk::route('/{record}/edit'),
        ];
    }
}
