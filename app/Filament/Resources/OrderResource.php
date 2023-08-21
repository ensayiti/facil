<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Filament\Resources\OrderResource\RelationManagers;
use App\Models\Order;
use Faker\Provider\ar_EG\Text;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    Select::make('customer_id')
                        ->required()
                        ->label('Customer')
                        ->relationship('customer', 'name'),
                    Select::make('inventory_id')
                        ->required()
                        ->label('Item')
                        ->relationship('inventory', 'name'),
                    DatePicker::make('order_date')
                        ->required()
                        ->label('Order Date'),
                    DatePicker::make('order_complete')
                        ->nullable()
                        ->label('Order Complete'),
                    TextInput::make('price')
                        ->nullable()
                        ->numeric(),
                    Select::make('status')
                        ->nullable()
                        ->options([
                            "Unpaid" => "Unpaid",
                            "Paid" => "Paid",
                            "Pending" => "Pending",
                            "Cancelled" => "Cancelled",
                        ])
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('No.')->state(
                    static function (HasTable $livewire, \stdClass $rowLoop): string {
                        return (string) ($rowLoop->iteration +
                            ($livewire->getTableRecordsPerPage() * ($livewire->getTablePage() - 1
                            ))
                        );
                    }
                ),
                TextColumn::make('customer.name')
                    ->label('Customer'),
                TextColumn::make('inventory.name')
                    ->label('Item'),
                TextColumn::make('order_date')
                    ->label('Order Start')
                    ->date(),
                TextColumn::make('order_complete')
                    ->label('Order Complete')
                    ->date(),
                TextColumn::make('price')
                    ->money('idr'),
                TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Unpaid' => 'gray',
                        'Pending' => 'warning',
                        'Paid' => 'success',
                        'Cancelled' => 'danger',
                    })
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                ->successNotificationTitle('Order has been updated!'),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            // 'edit' => Pages\EditOrder::route('/{record}/edit'),
        ];
    }
}
