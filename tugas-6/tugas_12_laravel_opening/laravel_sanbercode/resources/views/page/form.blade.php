<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up Form</title>
</head>
<body>
  <h1>Buat Akun Baru!</h1>
  <h2>Sign Up Form</h2>
  <form action="/welcome" method="POST">
    @csrf
    <label>First name:<br><br>
      <input type="text" name="first_name" required><br><br>
    </label>

    <label>Last name:<br><br>
      <input type="text" name="last_name" required><br><br>
    </label>

    <label>Gender:<br><br>
      <input type="radio" name="gender" value="male" required>Male<br>
      <input type="radio" name="gender" value="female" required>Female<br>
      <input type="radio" name="gender" value="other" required>Other<br><br>
    </label>

    <label>Nationality:<br><br>
      <select name="nationality">
        <option value="Indonesian">Indonesian</option>
        <option value="Malaysian">Malaysian</option>
        <option value="Singaporean">Singaporean</option>
        <option value="Australian">Australian</option>
      </select><br><br>
    </label>

    <label>Language Spoken:<br><br>
      <input type="checkbox" name="language" value="bahasa">Bahasa Indonesia<br>
      <input type="checkbox" name="language" value="english">English<br>
      <input type="checkbox" name="language" value="other">Other<br><br>
    </label>

    <label>Bio:<br><br>
      <textarea name="bio" rows="11" cols="31"></textarea><br>
    </label>

    <input type="submit" value="Sign Up">
  </form>
</body>
</html>