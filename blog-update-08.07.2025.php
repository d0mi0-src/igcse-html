<?php
  session_start();
  if (!isset($_SESSION["user"])) {
    session_destroy();
    header ("Location: access_denied.html");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Egyptian IGCSE resource archive. A student-made, student-run underground archive to help IGCSE students.">
  <meta name="keywords" content="IGCSE.html, IGCSE egypt, IGCSE notes, IGCSE archive, IGCSE pastpapers, purehtml, igcse.html, igcsehtml.netlify.app">
  <meta name="author" content="d0mi0">
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
  <link rel="manifest" href="site.webmanifest">
  <link rel="stylesheet" href="nav.css">
  <title>Update - What's New?</title>
  <style>
    body {
      background-color: black;
      color: rgb(0, 255, 0);
      font-family:'Courier New', Courier, monospace;
    }
    footer {
      margin-top: 40px;
    }
    hr {
      border-top: 1px dashed;
      border-bottom: none;
    }
    article {
      padding: 10px;
    }
  </style>
</head>
<body>
  <?php include ("main_nav.html") ?>
  <article>
    <center><p>﷽</p></center>
    <p><b>👾 The 09/07/2025 Expansion Update – Enter the Network</b></p>
    <p><i>— Bigger, Badder, Real-time. We Reshaped the Whole Thing.</i></p>
    <p><i>Posted: 09/07/2025 — by root_user: @d0mi0</i></p>
    <hr>
    <p>Let’s not waste time.</p>
    <p>The last update laid the foundation. This one? It turns the static into motion.</p>
    <p>igcse.html just went from a quiet underground vault… to a living, breathing, dynamic system.</p>
    <p>The site’s no longer a plain page dump. It’s a machine now.</p>
    <hr>
    <p>💬 1. Built-in Chats – Real Talk, Real Time</p>
    <p>You asked. We built. Two brand new chat pages have been embedded inside the system:</p>
    <ul>
      <li><b>Chat with the Founder:</b> Talk directly with me (d0mi0). Share ideas, bug reports, chaos.</li>
      <li><b>Chat with Previous IGCSE Students:</b> Ask them anything. What they regret. What worked. What didn't.</li>
    </ul>
    <p>Both chats are monitored (barely) but free for all registered users. Keep it smart, or get auto-kicked by the bot (yes, there’s a bot now).</p>
    <hr>
    <p>📨 2. Submit Something – No More DMs</p>
    <p>We now have proper submission forms. Want to send us:</p>
    <ul>
      <li>New resources you made?</li>
      <li>Found a bug?</li>
      <li>Wrote a review of your tuition teacher?</li>
    </ul>
    <p>It all goes through PHP-powered forms now. No third-party apps. No spammy forms. Straight to our database. Straight to the crew.</p>
    <hr>
    <p>🌐 3. New Interface – Same Soul, Different Skin</p>
    <p>We rebuilt the frontend while keeping the vibe. Everything’s still pure and retro — black screen, green text, hacker core — but now it just *flows* better.</p>
    <p>New navbar on every page. Login + Signup system finally added — and here’s the twist:</p>
    <ul>
      <li><b>No emails. No phone numbers. No tracking. Just username and password.</b></li>
      <li>Anonymous. Free. Underground forever.</li>
    </ul>
    <p>And if you forget your password, well… that’s on you. We told you to write it down.</p>
    <hr>
    <p>👀 4. More Easter Eggs. More Secrets. More Warps.</p>
    <p>We’ve doubled down on hidden stuff.</p>
    <p>Hidden pages. Secret keystrokes. Terminal codes. Inside jokes. If you think you found everything before — think again. Hall of Fame awaits those who dig deep enough.</p>
    <hr>
    <p>🌟 5. Tuition Teacher Reviews – Real Ones Only</p>
    <p>Every Cairo kid knows the tuition game. Now we’ve got a dedicated reviews page — anonymous but honest.</p>
    <ul>
      <li>Tell others what your teacher was really like.</li>
      <li>Help someone avoid the bad ones (or find the good ones).</li>
      <li>Optional rating system coming soon.</li>
    </ul>
    <p>These reviews go through moderation — not to censor, just to make sure it’s not trolling.</p>
    <hr>
    <p>🚀 6. UX/UI Improvements – Fast. Smooth. Still Retro.</p>
    <p>We optimized everything under the hood. Page rendering is now faster. Button placements make sense. Mobile’s still nerfed (by design), but desktop just feels cleaner now.</p>
    <p>Think of it as reshaping a broken ship — welded back together by students with nothing but Notepad++ and coffee.</p>
    <hr>
    <p>📓 7. Blogs Page – Broadcasts from the Underground</p>
    <p>This one's been long overdue. igcse.html now has its very own blogs page – a digital bulletin board for everything we’re doing, everything we’ve done, and everything we’re about to do.</p>
    <p>From now on, every major collab, update, new feature, or unfiltered opinion from the core team (me, d0mi0) will land there. Think of it as the changelog you actually want to read. No corporate jargon. No marketing fluff. Just honest updates from the people building this thing, by hand.</p>
    <hr>
    <p>⚠️ 8. Disclaimer Page – Read This or Regret It</p>
    <p>Yup, we now have a full-blown disclaimer page. Not because lawyers told us to (we don’t even have any), but because people need to know what they’re walking into.</p>
    <p>Here’s the short version:</p>
    <ul>
      <li>We're not official.</li>
      <li>We're not perfect.</li>
      <li>We’re students, building for other students, and this place runs on trust and chaos.</li>
    </ul>
    <p>We’ve outlined everything there — how the resources work, what we’re not responsible for, why the site works best on desktop (yes, seriously), and what this movement actually stands for.</p>
    <p>Before using the site properly, take a few minutes to read it. It’s half legal info, half manifesto.</p>
    <hr>
    <p>🏅 9. Hall of Fame – New Names, New Legends</p>
    <p>If you’ve contributed to igcse.html lately — by sharing resources, testing features, spotting bugs, or just sending us good vibes — your name might now be proudly glowing in our Hall of Fame.</p>
    <p>We're keeping this place alive together. And everyone who helps deserves recognition. Check if you made it in the list, and if not — well, maybe your moment’s coming in the next update.</p>
    <p>More contributors = more chaos = more fun.</p>
    <hr>
    <p>🤝 10. Ysteam Collab – Merging Forces</p>
    <p>This one’s big.</p>
    <p>We’re officially collaborating with Ysteam, led by Eng. Youssef El Fouly.</p>
    <p>They’ve contributed:</p>
    <ul>
      <li>Over 10 active WhatsApp groups (and counting), organized by subject.</li>
      <li>2 help groups where students ask & answer real questions daily.</li>
      <li>Access to future study material created by their educators — which, once released, will be uploaded straight to igcse.html (of course, all free).</li>
    </ul>
    <p>But here's the catch:</p>
    <p>No paid services, no ads, no sales. Ever.</p>
    <p>That’s the igcse.html policy — and it’s staying that way.</p>
    <p>All their groups will appear in the [Resources Page > The Network (Communities & Extras)] under “Ysteam Groups”. Their material will be stored in the Underground Library, clearly labeled and credited.</p>
    <p>This isn’t a takeover. It’s a handshake. Two projects with the same spirit, joining forces to serve students — for free.</p>
    <hr>
    <p>📦 Final Transmission</p>
    <p>igcse.html is no longer static. No longer flat. It's alive now. And it's only gonna get crazier from here.</p>
    <p>You’re not just visiting a site anymore. You're walking into a system — built with hands, hearts, and broken sleep cycles.</p>
    <p>Stay logged in. Stay weird. And stay tuned.</p>
    <p><b>The Underground grows in silence. Then one day — it roars.</b></p>
    <i><p>// root_user: @d0mi0 | <b>"free palestine"</b></p></i>
  </article>
</body>
</html>
