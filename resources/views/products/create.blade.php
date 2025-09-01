@extends('layouts.app') 
@section('content') 
<div class="mx-auto max-w-2xl">
    <div class="rounded-xl border border-slate-200 bg-white/80 shadow-sm"> 
        <div class="flex items-center justify-between border-b border-slate-200 px-5 py-4 bg-usjr-green/5"> 
            <div class="font-semibold tracking-tight text-usjr-green">Add New Product</div> 
            <a href="{{ route('products.index') }}" class="rounded-md bg-white px-3 py-1.5 text-sm font-medium text-usjr-deep ring-1 ring-inset ring-usjr-gold/40 hover:bg-usjr-gold/10">&larr; Back</a> 
        </div> 
        <div class="px-5 py-5"> 
            <form action="{{ route('products.store') }}" method="post" class="space-y-5"> 
                @csrf 
                <div class="grid gap-2">
                    <label for="code" class="text-sm font-medium text-slate-700">Code</label> 
                    <input type="text" id="code" name="code" value="{{ old('code') }}" class="w-full rounded-md border border-slate-300 bg-white px-3 py-2 text-slate-900 placeholder-slate-400 focus:border-usjr-green focus:outline-none focus:ring-2 focus:ring-usjr-green/20 @error('code') !border-rose-300 @enderror"> 
                    @error('code') 
                    <span class="text-sm text-rose-600">{{ $message }}</span> 
                    @enderror 
                </div> 

                <div class="grid gap-2">
                    <label for="name" class="text-sm font-medium text-slate-700">Name</label> 
                    <input type="text" id="name" name="name" value="{{ old('name') }}" class="w-full rounded-md border border-slate-300 bg-white px-3 py-2 text-slate-900 placeholder-slate-400 focus:border-usjr-green focus:outline-none focus:ring-2 focus:ring-usjr-green/20 @error('name') !border-rose-300 @enderror"> 
                    @error('name') 
                    <span class="text-sm text-rose-600">{{ $message }}</span> 
                    @enderror 
                </div> 

                <div class="grid gap-2">
                    <label for="quantity" class="text-sm font-medium text-slate-700">Quantity</label> 
                    <input type="number" id="quantity" name="quantity" value="{{ old('quantity') }}" class="w-full rounded-md border border-slate-300 bg-white px-3 py-2 text-slate-900 placeholder-slate-400 focus:border-usjr-green focus:outline-none focus:ring-2 focus:ring-usjr-green/20 @error('quantity') !border-rose-300 @enderror"> 
                    @error('quantity') 
                    <span class="text-sm text-rose-600">{{ $message }}</span> 
                    @enderror 
                </div> 

                <div class="grid gap-2">
                    <label for="price" class="text-sm font-medium text-slate-700">Price</label> 
                    <input type="number" step="0.01" id="price" name="price" value="{{ old('price') }}" class="w-full rounded-md border border-slate-300 bg-white px-3 py-2 text-slate-900 placeholder-slate-400 focus:border-usjr-green focus:outline-none focus:ring-2 focus:ring-usjr-green/20 @error('price') !border-rose-300 @enderror"> 
                    @error('price') 
                    <span class="text-sm text-rose-600">{{ $message }}</span> 
                    @enderror 
                </div> 

                <div class="grid gap-2">
                    <label for="description" class="text-sm font-medium text-slate-700">Description</label> 
                    <textarea id="description" name="description" class="min-h-28 w-full rounded-md border border-slate-300 bg-white px-3 py-2 text-slate-900 placeholder-slate-400 focus:border-usjr-green focus:outline-none focus:ring-2 focus:ring-usjr-green/20 @error('description') !border-rose-300 @enderror">{{ old('description') }}</textarea> 
                    @error('description') 
                    <span class="text-sm text-rose-600">{{ $message }}</span> 
                    @enderror 
                </div> 

                <div>
                    <input type="submit" value="Add Product" class="cursor-pointer rounded-md bg-usjr-green px-4 py-2 text-sm font-medium text-white hover:bg-usjr-deep"> 
                </div> 
            </form> 
        </div> 
    </div>    
</div> 
@endsection 