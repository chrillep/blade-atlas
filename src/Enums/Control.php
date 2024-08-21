<?php

namespace Arrgh11\WireBook\Enums;

enum Control: string
{
    case TEXT = 'text';
    case TEXTAREA = 'textarea';
    case SELECT = 'select';
    case CHECKBOX = 'checkbox';
    case RADIO = 'radio';
    case FILE = 'file';
    case TOGGLE = 'toggle';

    public function getView(): string
    {
        return match ($this) {
            self::TEXT => 'wirebook::support.controls.input',
            self::TEXTAREA => 'wirebook::support.controls.textarea',
            self::SELECT => 'wirebook::support.controls.select',
            self::CHECKBOX => 'wirebook::support.controls.checkbox',
            self::RADIO => 'wirebook::support.controls.radio',
            self::FILE => 'wirebook::support.controls.file',
            self::TOGGLE => 'wirebook::support.controls.toggle',
        };
    }
}
