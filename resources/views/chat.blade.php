@extends('layouts.app')

@section('content')
    <h1 class="text-center">Chat App</h1>
    <message :messages="messages"></message>
    <sent-message v-on:messagesent="addMessage" :user="{{ auth()->user() }}"></sent-message>
@endsection