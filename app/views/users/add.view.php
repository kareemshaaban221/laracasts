
<!-- content -->

<div class="container m-auto w-50">
    <form action="/users" method="POST">
        <fieldset class="border border-dark rounded">

            <legend class="w-auto m-2 p-2">Add user</legend>

            <table class="m-auto center">
                <tr class="bg-dark text-light border border-bottom-light">
                    <td><label for="fname">fname: </label></td>
                    <td><input type="text" id="fname" name="fname"></td>
                </tr>

                <tr class="bg-dark text-light border border-bottom-light">
                    <td><label for="lname">lname: </label></td>
                    <td><input type="text" id="lname" name="lname"></td>
                </tr>

                <tr class="bg-dark text-light border border-bottom-light">
                    <td><label for="email">email: </label></td>
                    <td><input type="email" id="email" name="email"></td>
                </tr>

                <tr class="bg-dark text-light border border-bottom-light">
                    <td><label for="password">password: </label></td>
                    <td><input type="password" id="password" name="password"></td>
                </tr>

                <tr class="bg-dark text-light border border-bottom-light">
                    <td><label for="vip">vip: </label></td>
                    <td><input type="checkbox" id="vip" name="vip"></td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" value="Send" class="btn btn-info">
                    </td>
                </tr>
            </table>

        </fieldset>
    </form>
</div>