<section>
    <form method="POST" action="{{ route('profile.update') }}">
        @csrf
        @method('PUT')
    
        <!-- Your custom form fields go here -->
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" required>
    
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" required>
    
        <!-- Add more fields as needed -->
    
        <button type="submit">Update Profile</button>
    </form>
</section>
