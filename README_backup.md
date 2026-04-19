# QuickPOS – Landing Page

> A modern, responsive PHP landing page for the QuickPOS Point of Sale system.
> Built as part of SPM Assignment 4.

---

## 🚀 Project Overview

QuickPOS is a professional landing page built with PHP, HTML5, and CSS3. It features a full single-page layout with 6 core sections, a PHP-backed contact form, and a fully responsive mobile design.

**Tech Stack:** PHP 7.4+ · HTML5 · CSS3 (Custom) · Vanilla JavaScript

---

## 📁 File Structure

```
quickpos-landing/
├── index.php          # Main landing page (all 6 sections)
├── contact.php        # PHP contact form handler with validation
├── thankyou.html      # Success redirect page
├── submissions.log    # Auto-generated form submissions log (gitignored)
└── README.md          # This file
```

---

## ⚙️ Local Setup Instructions

### Prerequisites
- **XAMPP** (recommended): [Download here](https://www.apachefriends.org/download.html)
- **PHP 7.4 or higher**
- A modern browser (Chrome, Firefox, Edge)

### Steps

**1. Install XAMPP**
Download and install XAMPP for your operating system.

**2. Clone the repository**
```bash
git clone https://github.com/YOUR_USERNAME/quickpos-landing.git
```

**3. Place in XAMPP's web root**
- Windows: Copy the folder to `C:\xampp\htdocs\quickpos-landing\`
- macOS: Copy to `/Applications/XAMPP/htdocs/quickpos-landing/`

**4. Start XAMPP**
- Open XAMPP Control Panel
- Click **Start** next to **Apache**

**5. Open in browser**
```
http://localhost/quickpos-landing/index.php
```

---

## 🔀 Branching Strategy (GitFlow)

```
main
  └── develop
        ├── feature/POS-XX-description
        └── bugfix/POS-XX-description
```

- **`main`** – Production-ready code only. Protected branch. No direct commits.
- **`develop`** – Integration branch. All features merge here first.
- **`feature/*`** – One branch per Jira ticket. Merged to `develop` via Pull Request.
- **`bugfix/*`** – Bug fix branches. Same PR process as features.

### Commit Message Format
All commits must reference the Jira ticket number:
```
[POS-XX] Short description of what was done
```
Example:
```
[POS-8] Add contact form with name, email, message fields
```

### Pull Request Rules
- All PRs target `develop` (not `main`)
- Must be reviewed and approved by at least 1 team member
- PR title must include the Jira ticket number
- No self-merges

---

## 📋 Landing Page Sections

| Section | File | Jira Epic |
|---------|------|-----------|
| Navigation & Header | `index.php` | POS-4 |
| Hero Section | `index.php` | POS-5 |
| Features Section | `index.php` | POS-6 |
| Pricing Section | `index.php` | POS-7 |
| Contact Form (HTML) | `index.php` | POS-8 |
| Contact Form (PHP) | `contact.php` | POS-9 |
| Footer | `index.php` | POS-10 |
| Thank You Page | `thankyou.html` | POS-9c |

---

## 📬 Contact Form

The contact form (`index.php` → `contact.php`) includes:
- **Client-side validation** via JavaScript (before submission)
- **Server-side validation** via PHP (after submission):
  - Name: required, non-empty
  - Email: required, valid format (RFC 5322 via `filter_var`)
  - Message: required, minimum 10 characters
- **Success flow**: Redirects to `thankyou.html`
- **Simulated email response** (no real mail server needed)
- **Submission logging** to `submissions.log`

---

## 👥 Team

| Role | Responsibilities |
|------|-----------------|
| **Project Manager / QA** | Jira board, sprint meetings, test cases, bug logging |
| **Tech Lead** | GitHub repo management, code review, primary feature code |

---

## 🛠️ Tools Used

| Tool | Purpose |
|------|---------|
| [Jira](https://atlassian.com/jira) | Project management, sprint tracking, bug logging |
| [GitHub](https://github.com) | Version control, code hosting, PR reviews |
| [Slack](https://slack.com) | Team communication, Jira + GitHub notifications |
| [XAMPP](https://apachefriends.org) | Local PHP development server |

---

## 📌 Jira Project

- **Project Key:** `POS`
- **Project URL:** `https://YOUR_TEAM.atlassian.net/jira/software/projects/POS`
- **Sprints:** 2 × 1-week sprints

---

*© 2025 QuickPOS – SPM Assignment 4*
