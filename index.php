 <?php
// index.php - QuickPOS Landing Page
// [POS-4] [POS-5] [POS-6] [POS-7] [POS-8] [POS-10]

$success_message = '';
if (isset($_GET['success']) && $_GET['success'] === '1') {
    $success_message = 'Message sent successfully!';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickPOS – The Last POS System You'll Ever Need</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">
    <style>
 /* ===========================
           NAVIGATION & HEADER
           [POS-4]
        =========================== */
        nav {
            position: fixed;
            top: 0; left: 0; right: 0;
            z-index: 1000;
            padding: 0 24px;
            transition: var(--transition);
        }

        nav.scrolled {
            background: rgba(10,10,15,0.85);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-bottom: 1px solid var(--clr-border);
        }

        .nav-inner {
            max-width: 1160px;
            margin: 0 auto;
            height: 72px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .nav-logo {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }

        .logo-icon {
            width: 36px;
            height: 36px;
            background: linear-gradient(135deg, var(--clr-accent), var(--clr-accent2));
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
        }

        .logo-text {
            font-family: var(--font-display);
            font-size: 1.35rem;
            font-weight: 800;
            color: var(--clr-heading);
            letter-spacing: -0.02em;
        }

        .logo-text span { color: var(--clr-accent); }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 36px;
            list-style: none;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--clr-muted);
            font-size: 0.9rem;
            font-weight: 400;
            transition: var(--transition);
            letter-spacing: 0.01em;
        }

        .nav-links a:hover { color: var(--clr-text); }

        .btn-signup {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: var(--clr-accent);
            color: #fff !important;
            padding: 9px 20px;
            border-radius: 50px;
            font-size: 0.875rem;
            font-weight: 500;
            text-decoration: none;
            transition: var(--transition);
            white-space: nowrap;
        }

        .btn-signup:hover {
            background: #7c74ff;
            transform: translateY(-1px);
            box-shadow: 0 4px 20px rgba(108,99,255,0.4);
        }

        /* Hamburger */
        .nav-toggle {
            display: none;
            flex-direction: column;
            gap: 5px;
            cursor: pointer;
            background: none;
            border: none;
            padding: 4px;
        }

        .nav-toggle span {
            display: block;
            width: 24px;
            height: 2px;
            background: var(--clr-text);
            transition: var(--transition);
            border-radius: 2px;
        }
</style>
</body>
</html>