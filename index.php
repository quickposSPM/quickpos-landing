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
           CONTACT FORM
           [POS-8]
        =========================== */
        .contact {
            padding: 120px 0;
        }

        .contact-inner {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            align-items: start;
        }

        .contact-info h2 {
            font-size: clamp(2rem, 3.5vw, 2.8rem);
            font-weight: 800;
            letter-spacing: -0.03em;
            margin-bottom: 16px;
        }

        .contact-info p {
            color: var(--clr-muted);
            font-size: 1rem;
            line-height: 1.75;
            font-weight: 300;
            margin-bottom: 40px;
        }

        .contact-details {
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        .contact-detail-item {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .contact-detail-icon {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background: rgba(108,99,255,0.1);
            border: 1px solid rgba(108,99,255,0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            flex-shrink: 0;
        }

        .contact-detail-text {
            font-size: 0.9rem;
            color: var(--clr-muted);
        }
        .contact-detail-text strong {
            display: block;
            color: var(--clr-text);
            font-weight: 500;
            margin-bottom: 2px;
        }

        .contact-form-wrap {
            background: var(--clr-card);
            border: 1px solid var(--clr-border);
            border-radius: var(--radius);
            padding: 40px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 0.82rem;
            font-weight: 500;
            color: var(--clr-muted);
            margin-bottom: 8px;
            letter-spacing: 0.03em;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            background: var(--clr-surface);
            border: 1px solid var(--clr-border);
            border-radius: var(--radius-sm);
            padding: 13px 16px;
            font-family: var(--font-body);
            font-size: 0.92rem;
            color: var(--clr-text);
            outline: none;
            transition: var(--transition);
        }

        .form-group input:focus,
        .form-group textarea:focus {
            border-color: var(--clr-accent);
            box-shadow: 0 0 0 3px rgba(108,99,255,0.15);
        }

        .form-group textarea {
            height: 140px;
            resize: vertical;
            line-height: 1.6;
        }

        .form-group input::placeholder,
        .form-group textarea::placeholder { color: rgba(127,127,154,0.5); }

        .form-error {
            font-size: 0.78rem;
            color: var(--clr-accent3);
            margin-top: 6px;
            display: none;
        }

        .form-group.has-error input,
        .form-group.has-error textarea {
            border-color: var(--clr-accent3);
        }

        .form-group.has-error .form-error { display: block; }

        .btn-submit {
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, var(--clr-accent), #8b84ff);
            color: #fff;
            border: none;
            border-radius: 50px;
            font-family: var(--font-body);
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 32px rgba(108,99,255,0.4);
        }
</style>
</body>
</html>