---
name: release-version-bump
description: Workflow command scaffold for release-version-bump in raspap-webgui.
allowed_tools: ["Bash", "Read", "Write", "Grep", "Glob"]
---

# /release-version-bump

Use this workflow when working on **release-version-bump** in `raspap-webgui`.

## Goal

Prepares and documents a new release by updating version numbers and changelogs.

## Common Files

- `README.md`
- `includes/defaults.php`
- `index.php`

## Suggested Sequence

1. Understand the current state and failure mode before editing.
2. Make the smallest coherent change that satisfies the workflow goal.
3. Run the most relevant verification for touched files.
4. Summarize what changed and what still needs review.

## Typical Commit Signals

- Update version number in README.md
- Update version in includes/defaults.php
- Update index.php (possibly for version display or logic)
- Merge pull request for release

## Notes

- Treat this as a scaffold, not a hard-coded script.
- Update the command if the workflow evolves materially.