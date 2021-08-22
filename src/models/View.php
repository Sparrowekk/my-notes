<?php

declare(strict_types=1);
namespace MyNotes;


class View {

    private String $view;
    private String $webTitle = '';
    private String $styles = '';

    public function __construct($view, $webTitle) {
        $this->view = $view;
        $this->webTitle = $webTitle;
    }

    public function render(): void {
        require_once ("$this->view");
    }

    public function returnWebTitle(): ?string {
        return $this->webTitle;
    }

    public function returnStyles(): ?string {
        return $this->styles;
    }

}

