<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Register</title>

    </head>
    <body class="">
        <div class="container">
            <h1>Buat Akun Baru</h1>
            <h3>Sign Up Form</h3>
            <form action="{{ route('register.submit') }}" method="POST">
                @csrf
                <table>
                    <tr>
                        <td>First Name</td>
                        <td>:</td>
                        <td><input type="text"
                                placeholder="Input Your Firstname"></td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td>:</td>
                        <td><input type="text"
                                placeholder="Input Your Lastname"></td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>:</td>
                        <td>
                            <input type="radio" value="male"> Male
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input type="radio" value="female"> Female
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input type="radio" value="other"> Other
                        </td>
                    </tr>

                    <tr>
                        <td>Nationality</td>
                        <td>:</td>
                        <td>
                            <select>
                                <option value="Indonesian"> Indonesian </option>
                                <option value="Singapore"> Singapore </option>
                                <option value="India"> India </option>
                                <option value="Rusian"> Rusian </option>
                                <option value="Malaysia"> Malaysia </option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Language Spoken</td>
                        <td>:</td>
                        <td>
                            <input type="checkbox" value="Bahas Indonesia">
                            Bahas Indonesia
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input type="checkbox" value="English"> English
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input type="checkbox" value="other"> Other
                        </td>
                    </tr>
                    <tr>
                        <td>Bio</td>
                        <td>:</td>
                        <td>
                            <textarea name id cols="30" rows="5" placeholder="Input your bio"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><button type="submit">Sign Up</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>
