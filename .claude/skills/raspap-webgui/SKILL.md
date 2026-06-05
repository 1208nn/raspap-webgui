```markdown
# raspap-webgui Development Patterns

> Auto-generated skill from repository analysis

## Overview

This skill teaches you how to contribute to the `raspap-webgui` project, a JavaScript-based web interface for managing network services on Raspberry Pi devices. You'll learn the project's coding conventions, how to implement new features (including localization), update UI templates, manage releases, refactor service logic, and handle dependency updates. The guide provides step-by-step workflows, code style examples, and suggested commands for common tasks.

## Coding Conventions

### File Naming

- Use **camelCase** for JavaScript files and variables.
  - Example: `mainPage.js`, `networkSettings.js`
- PHP and template files use descriptive lowercase names with underscores or hyphens.
  - Example: `hostapd.php`, `openvpn.php`

### Import Style

- Use **relative imports** in JavaScript.
  ```js
  import { fetchData } from './networkUtils.js';
  ```

### Export Style

- Use **named exports** for JavaScript modules.
  ```js
  // networkUtils.js
  export function fetchData() { ... }
  export function sendData() { ... }
  ```

### Commit Messages

- Freeform style, no strict prefixes.
- Average commit message length: ~42 characters.
  - Example: `Add support for WPA3 in hostapd config`

## Workflows

### Feature Development with Translation
**Trigger:** When adding a new feature that requires backend, frontend, UI, and localization changes  
**Command:** `/new-feature-with-translation`

1. **Backend Logic:** Add or update PHP logic, typically in `ajax/networking/*.php`.
   ```php
   // ajax/networking/newFeature.php
   <?php
   // New backend logic here
   ?>
   ```
2. **Frontend JS:** Update or add JavaScript to support the feature, e.g., `app/js/ajax/main.js`.
   ```js
   // app/js/ajax/main.js
   export function enableNewFeature() { ... }
   ```
3. **Template Update:** Modify or add template files for UI changes, e.g., `templates/hostapd/basic.php`.
   ```php
   <!-- templates/hostapd/basic.php -->
   <button id="enable-feature">Enable Feature</button>
   ```
4. **Translation Update:** Update translation files:
   - Edit `locale/en_US/LC_MESSAGES/messages.po`
   - Compile to `messages.mo`
   ```po
   msgid "Enable Feature"
   msgstr "Enable Feature"
   ```
5. Test the feature across backend, frontend, and UI.

### Release Version Bump
**Trigger:** When preparing and documenting a new release  
**Command:** `/release-bump`

1. Update the version number in `README.md`.
2. Update the version in `includes/defaults.php`.
   ```php
   define('RASPI_VERSION', '2.9.0');
   ```
3. Update `index.php` if version display or logic is needed.
4. Merge the pull request for the release.

### UI Template Mass Update
**Trigger:** When applying a UI change across many parts of the web interface  
**Command:** `/ui-mass-update`

1. Edit multiple files under `templates/` to ensure UI consistency.
   - Example: Add a new CSS class to all buttons.
2. Optionally update `app/css/all.css` for global styles.
   ```css
   /* app/css/all.css */
   .btn-primary { background: #007bff; }
   ```
3. Optionally update `app/js/ui/main.js` for UI logic changes.
4. Test changes across all affected UI components.

### Service Control Refactor
**Trigger:** When reorganizing or improving service control logic/UI  
**Command:** `/refactor-service-controls`

1. Move or update service control code in `includes/*.php` (e.g., `includes/hostapd.php`).
2. Update corresponding templates (e.g., `templates/hostapd.php`, `templates/openvpn.php`).
3. Update related JS or add new UI elements if needed.
   ```php
   // includes/hostapd.php
   function restartHostapd() { ... }
   ```
   ```php
   <!-- templates/hostapd.php -->
   <button onclick="restartHostapd()">Restart</button>
   ```

### Dependency Update Automation
**Trigger:** When a dependency update is available (usually automated)  
**Command:** `/update-dependency`

1. Update dependency version in the lockfile, e.g., `yarn.lock`.
2. Merge the pull request for the dependency update.

## Testing Patterns

- **Testing Framework:** Unknown (not detected).
- **Test File Pattern:** Files named `*.test.*` (e.g., `main.test.js`).
- Tests are likely colocated with source files or in dedicated test directories.
- Example test file:
  ```js
  // networkUtils.test.js
  import { fetchData } from './networkUtils';

  test('fetchData returns expected result', () => {
    expect(fetchData()).toBe(/* expected value */);
  });
  ```

## Commands

| Command                        | Purpose                                                        |
|---------------------------------|----------------------------------------------------------------|
| /new-feature-with-translation   | Add a new feature with backend, frontend, UI, and localization |
| /release-bump                   | Prepare and document a new release                             |
| /ui-mass-update                 | Apply UI changes across multiple templates                     |
| /refactor-service-controls      | Refactor or reorganize service control logic                   |
| /update-dependency              | Update a dependency version (automated)                        |
```
