---
name: feature-development-with-translation
description: Workflow command scaffold for feature-development-with-translation in raspap-webgui.
allowed_tools: ["Bash", "Read", "Write", "Grep", "Glob"]
---

# /feature-development-with-translation

Use this workflow when working on **feature-development-with-translation** in `raspap-webgui`.

## Goal

Implements a new feature that involves backend logic, frontend JS, template updates, and translation/localization updates.

## Common Files

- `ajax/networking/*.php`
- `app/js/ajax/main.js`
- `templates/hostapd/basic.php`
- `locale/en_US/LC_MESSAGES/messages.po`
- `locale/en_US/LC_MESSAGES/messages.mo`

## Suggested Sequence

1. Understand the current state and failure mode before editing.
2. Make the smallest coherent change that satisfies the workflow goal.
3. Run the most relevant verification for touched files.
4. Summarize what changed and what still needs review.

## Typical Commit Signals

- Add or update backend PHP logic (e.g., ajax/networking/*.php)
- Update frontend JS to support new feature (e.g., app/js/ajax/main.js)
- Modify or add template files for UI changes (e.g., templates/hostapd/basic.php)
- Update translation source and compiled files (locale/en_US/LC_MESSAGES/messages.po and messages.mo)

## Notes

- Treat this as a scaffold, not a hard-coded script.
- Update the command if the workflow evolves materially.