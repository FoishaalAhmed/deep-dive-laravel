
@include('app')

<x-main>
  <x-title>Create User</x-title>
  <form action="/action_page.php">
    <x-forms.input name="name"/>
    <x-forms.input name="email"/>
    <x-forms.input name="password" type="password"/>
    <x-forms.input name="confirm_password" type="password"/>
    <x-forms.check-box-filled>
      <x-forms.input name="remember" type="checkbox" class="form-check-input" noFormControl="true"/>
    </x-forms.check-box-filled>
    <x-forms.button class="btn-primary">Submit</x-forms.button>
  </form>
</x-main>
