@extends('layouts.app')

<h1> Welcome <h1>

	<a href="{{ route('profile.show') }}">Profile</a>
	<a href="{{ route('clothes.create') }}">Add New Clothes</a>
	<a href="{{ route('clothes.show', ['clothes' => $clothes->id]) }}">View</a>


