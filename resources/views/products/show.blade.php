@extends('layouts.app') 
@section('content') 
<div class="mx-auto max-w-2xl"> 
    <div class="rounded-xl border border-slate-200 bg-white/80 shadow-sm"> 
        <div class="flex items-center justify-between border-b border-slate-200 px-5 py-4"> 
            <div class="font-semibold tracking-tight">Product Information</div> 
            <a href="{{ route('products.index') }}" class="rounded-md bg-slate-100 px-3 py-1.5 text-sm font-medium text-slate-700 hover:bg-slate-200">&larr; Back</a> 
        </div> 
        <div class="px-5 py-5 space-y-4"> 
            <div class="grid grid-cols-3 items-start gap-3">
                <label class="text-sm font-medium text-slate-600">Code</label> 
                <div class="col-span-2 text-slate-900">{{ $product->code }}</div> 
            </div> 
            <div class="grid grid-cols-3 items-start gap-3">
                <label class="text-sm font-medium text-slate-600">Name</label> 
                <div class="col-span-2 text-slate-900">{{ $product->name }}</div> 
            </div> 
            <div class="grid grid-cols-3 items-start gap-3">
                <label class="text-sm font-medium text-slate-600">Quantity</label> 
                <div class="col-span-2 text-slate-900">{{ $product->quantity }}</div> 
            </div> 
            <div class="grid grid-cols-3 items-start gap-3">
                <label class="text-sm font-medium text-slate-600">Price</label> 
                <div class="col-span-2 text-slate-900">{{ $product->price }}</div> 
            </div> 
            <div class="grid grid-cols-3 items-start gap-3">
                <label class="text-sm font-medium text-slate-600">Description</label> 
                <div class="col-span-2 text-slate-900">{{ $product->description }}</div> 
            </div> 
        </div> 
    </div>    
</div> 
@endsection 