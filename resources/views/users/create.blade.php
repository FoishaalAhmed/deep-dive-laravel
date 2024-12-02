
@include('app')

<x-main>
  <x-title>Create User</x-title>
  <form action="/action_page.php">
    <x-forms.input name="name" />
    <x-forms.input name="email" placeholder="Enter email" />
    <x-forms.input name="password" type="password" />
    <x-forms.input name="confirm_password" type="password" />
    <x-forms.input name="remember" type="checkbox" label="Remember Me" />
    <x-forms.button class="btn-primary">Submit</x-forms.button>
  </form>
</x-main>

