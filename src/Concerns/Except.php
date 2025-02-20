<?php

namespace pxlrbt\FilamentExcel\Concerns;

trait Except
{
    protected ?array $except = null;

    public function except(array|string $columns): self
    {
        $this->except = is_array($columns) ? $columns : func_get_args();

        return $this;
    }

    public function getExcept(): ?array
    {
        return $this->except;
    }
}
