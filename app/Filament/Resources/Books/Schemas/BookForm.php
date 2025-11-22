<?php

namespace App\Filament\Resources\Books\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class BookForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')->required(),
                FileUpload::make('cover')->required(),
                Select::make('category_id')
                    ->relationship('category','name')->required(),
                TextInput::make('author')->required(),
                TextInput::make('synopsis')->required(),
            ]);
    }
}
