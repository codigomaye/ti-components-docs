---
title: Getting Started
description: Getting started with Jigsaw's docs starter template is as easy as 1, 2, 3.
extends: _layouts.documentation
author: david.maye
section: content
links:
    - ['Atoms', 'Smallest elemtents of the framework', '/docs/atoms']
    - ['Molecules', 'Group of atoms', '/docs/molecules']
    - ['Organisms', 'Group of molecules', '/docs/organisms']
---

Click on the component type you want to know more about

<div class="row">
@foreach($page->links as $item)
    <div class="col">
            <x-molecules.ti-card :title="$item[0]" :subtitle="$item[1]" variant="auto-size" :url="$item[2]" url_text="Access">
            </x-molecules.ti-card>
    </div>
@endforeach
</div>
