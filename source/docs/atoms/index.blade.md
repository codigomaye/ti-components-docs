---
title: Atoms
description: List of atoms in TI atoms
extends: _layouts.documentation
section: content

---

<div class="row g-3">
@foreach($atoms as $item)
    <div class="col col-lg-3">
            <x-molecules.ti-card :title="$item->title" :subtitle="$item->description" variant="auto-size" :url="$item->getUrl()" url_text="Access">
            </x-molecules.ti-card>
    </div>
@endforeach
</div>
