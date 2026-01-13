<?php

namespace App\Filament\Resources\Events;

use App\Filament\Resources\Events\Pages\ManageEvents;
use App\Models\Event;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\FileUpload;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Evento';

    protected static ?string $modelLabel = 'Evento';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('title')
                    ->required(),

                TextInput::make('address')
                    ->required(),

                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),

                Textarea::make('description_long')
                    ->required()
                    ->columnSpanFull(),

                DateTimePicker::make('event_datetime')
                    ->required(),

                TextInput::make('price')
                    ->label('Preço')
                    ->numeric()
                    ->nullable()
                    ->prefix('R$'),

                TextInput::make('location')
                    ->required(),

                Repeater::make('galleryImages')
                    ->relationship()
                    ->minItems(0)
                    ->schema([
                        FileUpload::make('image_url')
                            ->label('Imagem')
                            ->directory('galeria')
                            ->disk('public')
                            ->visibility('public')
                            ->image(),

                        TextInput::make('description')
                            ->label('Descrição da imagem')
                            ->maxLength(200),
                    ])
                    ->columnSpanFull(),

            ]);
    }




    public static function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('Evento')
            ->columns([
                TextColumn::make('title')
                    ->searchable(),
                TextColumn::make('address')
                    ->searchable(),
                TextColumn::make('event_datetime')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('location')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageEvents::route('/'),
        ];
    }
}
