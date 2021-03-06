<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Captive Portal :: Camping Punta Indiani</title>

    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html">

    <meta name="author" content="Martin Brugnara <martin.brugnara@gmail.com>">

    <style type="text/css">

      body {
        font-family: "Helvetica Neue", Arial, sans-serif;
        font-size: 14pt;
      }

      #box {
        width: 550px;
        border: 1px solid #333;
        margin: auto;
      }

      header {
        font-size: 16pt;
        font-weight: bold;
        color: white;
        background-color: #fc3;
        color: #3c3c3c;
        padding: 2px;
        border-bottom: 1px solid #333;
      }

      form {
        margin-top: 40px;
          margin-bottom: 34px;
      }

      form div {
        text-align: center;
        vertical-align: middle;
      }

      form div label {
        display: inline-block;
        width: 100px;
        text-align: left;
      }


      input {
        /*border: 1px dashed #333; */
        font-size: 13pt;
      }

      button {
        font-size: 16pt;
        background-color: #129fea;
        box-shadow: 0 1.5px 4px rgba(0, 0, 0, 0.24), 0 1.5px 6px rgba(0, 0, 0, 0.12);
        border: 0;
        border-radius: 1px;
        color: #fff;
        line-height: 30px;
      }

      footer {
        font-size: 8pt;
        font-style: italic;
        text-align: center;
        border-top: 1px solid #333;
      }

      .error {
        text-align: center;
        color: rebeccapurple;
      }

    </style>
    <link rel="icon" type="image/gif" href="data:image/gif;base64,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">
  </head>
  <body>
    <div id="box">
      <header>Captive Portal | <small>internet access restricted</small></header>
      <div>
        <form method="POST" action="$PORTAL_ACTION$">
          <input name="redirurl" type="hidden" value="$PORTAL_REDIRURL$">
          <input name="zone" type="hidden" value="$PORTAL_ZONE$">

          <p class="error">$PORTAL_MESSAGE$</p>

          <div>
            <label for="auth_user">Username</label>
            <input name="auth_user" type="text" size="20">
          </div>
          <div>
            <label for="auth_pass">Password</label>
            <input name="auth_pass" type="password" size="20">
          </div>

          <br>
          <div>
            <button type="submit" name="accept" value="Continue">Continue</button>
          </div>
        </form>
      </div>
      <footer>Powered by BSD - pfSense || Offered by: Camping Punta Indiani &lt;Martin Brugnara&gt;</footer>
    </div>
  </body>
</html>
