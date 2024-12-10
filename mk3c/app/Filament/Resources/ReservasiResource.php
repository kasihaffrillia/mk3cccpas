<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReservasiResource\Pages;
use App\Models\Reservasi;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;

class ReservasiResource extends Resource
{
    protected static ?string $model = Reservasi::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->label('Nama Pelanggan')
                    ->required()
                    ->maxLength(255),

                Forms\Components\DatePicker::make('tanggal')
                    ->label('Tanggal Reservasi')
                    ->required(),

                    Forms\Components\TimePicker::make('jam') // Pastikan ini menggunakan TimePicker
                    ->label('Jam Reservasi')
                    ->required(),

                Forms\Components\Select::make('jenis_reservasi')
                    ->label('Jenis Reservasi')
                    ->options([
                        'dine_in' => 'Dine In',
                        'takeaway' => 'Takeaway',
                    ])
                    ->required(),

                Forms\Components\Textarea::make('catatan')
                    ->label('Catatan')
                    ->maxLength(500),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('tanggal')
                    ->label('Tanggal Reservasi')
                    ->sortable(),

                Tables\Columns\TextColumn::make('jam')
                    ->label('Jam Reservasi')
                    ->sortable(),

                Tables\Columns\TextColumn::make('jenis_reservasi')
                    ->label('Jenis Reservasi'),

                Tables\Columns\TextColumn::make('catatan')
                    ->label('Catatan')
                    ->limit(50),
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
            'index' => Pages\ListReservasis::route('/'),
            'create' => Pages\CreateReservasi::route('/create'), // Pastikan ada route create
            'edit' => Pages\EditReservasi::route('/{record}/edit'),
        ];
    }
}
