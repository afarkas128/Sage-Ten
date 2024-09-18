<?php

declare(strict_types=1);

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use InvalidArgumentException;

class Button extends Component
{
    public string $type;
    public string $type_class;

    protected array $types = [
        'primary' => 'btn btn-primary',
        'outline' => 'btn btn-outline-primary',
    ];

    /**
     * Create a new component instance.
     */
    public function __construct(string $type = 'primary')
    {
        if (!array_key_exists($type, $this->types)) {
            throw new InvalidArgumentException("Invalid button type: $type");
        }

        $this->type = $type;
        $this->type_class = $this->types[$type];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|string
    {
        return view('components.button');
    }
}
