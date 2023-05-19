<?php

namespace App\View\Components\Frontend;

use App\Models\Program;
use Illuminate\View\Component;

class CardCampaign extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $program_id;
    public function __construct($program_id)
    {
        $this->program_id = $program_id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $program = Program::findOrFail($this->program_id);
        return view('components.frontend.card-campaign',compact('program'));
    }
}
