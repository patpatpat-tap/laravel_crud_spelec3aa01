@extends('layouts.app') 
@section('content') 
<div class="mx-auto max-w-6xl">
    @session('success') 
    <div class="mb-4 rounded-md border border-usjr-gold/40 bg-usjr-gold/15 px-4 py-3 text-usjr-deep"> 
        {{ $value }} 
    </div> 
    @endsession 

    <div class="rounded-xl border border-slate-200 bg-white/80 shadow-sm">
        <div class="flex items-center justify-between border-b border-slate-200 px-5 py-4 bg-usjr-green/5">
            <h2 class="text-lg font-semibold tracking-tight text-usjr-green">Product List</h2>
            <a href="{{ route('products.create') }}" class="inline-flex items-center rounded-md bg-usjr-gold px-3 py-2 text-sm font-medium text-usjr-deep hover:bg-usjr-gold-dark">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="mr-2 h-4 w-4"><path d="M10.75 4.75a.75.75 0 10-1.5 0v4.5h-4.5a.75.75 0 100 1.5h4.5v4.5a.75.75 0 101.5 0v-4.5h4.5a.75.75 0 100-1.5h-4.5v-4.5z"/></svg>
                Add New Product
            </a>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm">
                <thead class="bg-usjr-green/10 text-usjr-deep">
                    <tr>
                        <th class="px-5 py-3 font-medium">S#</th>
                        <th class="px-5 py-3 font-medium">Code</th>
                        <th class="px-5 py-3 font-medium">Name</th>
                        <th class="px-5 py-3 font-medium">Quantity</th>
                        <th class="px-5 py-3 font-medium">Price</th>
                        <th class="px-5 py-3 font-medium">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                @forelse ($products as $product) 
                    <tr class="hover:bg-usjr-gold/10">
                        <td class="px-5 py-3">{{ $loop->iteration }}</td> 
                        <td class="px-5 py-3">{{ $product->code }}</td> 
                        <td class="px-5 py-3">{{ $product->name }}</td> 
                        <td class="px-5 py-3">{{ $product->quantity }}</td> 
                        <td class="px-5 py-3">{{ $product->price }}</td> 
                        <td class="px-5 py-3"> 
                            <form action="{{ route('products.destroy', $product->id) }}" method="post" class="inline-flex items-center gap-2"> 
                                @csrf 
                                @method('DELETE') 
                                <a href="{{ route('products.show', $product->id) }}" class="rounded-md bg-white px-3 py-1.5 text-usjr-deep ring-1 ring-inset ring-usjr-gold/40 hover:bg-usjr-gold/10">Show</a> 
                                <a href="{{ route('products.edit', $product->id) }}" class="rounded-md bg-usjr-green/10 px-3 py-1.5 text-usjr-green hover:bg-usjr-green/20">Edit</a>   
                                <button type="submit" class="rounded-md bg-rose-100 px-3 py-1.5 text-rose-900 hover:bg-rose-200" onclick="return confirm('Do you want to delete this product?');">Delete</button> 
                            </form> 
                        </td> 
                    </tr> 
                @empty 
                    <tr>
                        <td colspan="6" class="px-5 py-6"> 
                            <span class="text-rose-600 font-medium"> 
                                No Product Found!
                            </span> 
                        </td> 
                    </tr>
                @endforelse 
                </tbody> 
            </table> 
        </div>
        <div class="flex items-center justify-center px-5 py-4">
            {{ $products->links() }} 
        </div>
    </div>    
</div> 
@endsection 