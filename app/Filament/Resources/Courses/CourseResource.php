<?php

namespace App\Filament\Resources\Courses;

use App\Filament\Resources\Courses\Pages\ManageCourses;
use App\Models\Course;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Forms\Components\Select;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use BackedEnum;
use Filament\Forms\Components\RichEditor;


class CourseResource extends Resource
{
    protected static BackedEnum|string|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $model = Course::class;

    protected static ?string $recordTitleAttribute = 'title';

    protected static ?string $modelLabel = 'Curso';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            
            TextInput::make('title')
                ->label('Título do curso')
                ->required(),

            TextInput::make('modality')
                ->label('Modalidade')
                ->required(),

            TextInput::make('duration')
                ->label('Duração')
                ->required(),

            Textarea::make('description')
                ->label('Descrição Card')
                ->maxLength(255)
                ->required()
                ->columnSpanFull(),


            RichEditor::make('description_long')
                ->label('Descrição completa')
                ->required()
                ->columnSpanFull()
                ->toolbarButtons([
                    ['bold', 'italic', 'underline', 'strike', 'subscript', 'superscript', 'link'],
                    ['h2', 'h3', 'alignStart', 'alignCenter', 'alignEnd'],
                    ['blockquote', 'bulletList', 'orderedList'],
                    ['table'], // The `customBlocks` and `mergeTags` tools are also added here if those features are used.
                    ['undo', 'redo'],
                ]),

            Select::make('id_categories')
                ->label('Categoria')
                ->relationship('category', 'title')
                ->required()
                ->searchable(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('title')
            ->columns([
                TextColumn::make('title')->searchable(),
                TextColumn::make('modality')->searchable(),
                TextColumn::make('duration')->searchable(),

                TextColumn::make('category.title')
                    ->label('Categoria')
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label('Criado em')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')
                    ->label('Atualizado em')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => ManageCourses::route('/'),
        ];
    }
}
