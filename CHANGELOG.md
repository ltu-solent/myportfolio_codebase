# Changelog

## 2022-11-02 21.10-r3 (Mahara 21.10.5)

### Core

- Security bug 1991157: Certain embedded images can be accessed without login
    - Résumé embedded items add rows to view_artefact table
    - Profile intro text embedded item add rows to view_artefact table
    - Update text block safe key
    - Prevent embedded images can be accessed without login
    - Fixup block owner check
    - Expand files handled
    - require_once(view.php)
- Security bug 1979575: Vulnerable PDF can trigger remote shell with PDF export and ghostscript
    - Add the -dSAFER flag to ghostscript calls

- Bug 1958297: Submission list for deleted people
- Bug 1969548: Export not working with MySQL8
- Bug 1972922: Ignore LTI groups from submission plugin workflow
- Bug 1973479: Secret URLs not working when page submitted
- Bug 1975753: Include mahara.js before plugins
- Bug 1978425: Adjust event log option 'masq' to 'masquerade'
- Bug 1978425: Create categories for the registered data
- Bug 1978425: External -> Plugins page to show title / version
- Bug 1979921: Allow for checking if $group id is integer
- Bug 1982520: Error with old block configdata
- Bug 1982803: Wrong email footer (quick fix)
- Bug 1983308: Public group homepage access
- Bug 1985857: Fix for issue with disappearing theme when portfolio is shared and made copyable
- Bug 1987027: Correctly save MNet parent auth on account creation
- Bug 1987354: Adding checks to fix share permissions removal on editing institution collection
- Bug 1988005: lib/group.php Added collection deletion logic to group delete function.
- Bug 1988692: Fixing badgr API calls 
- Bug 1991864: Badgr token reset message fix
- Bug 1992312: Flexible URL replacements

### Plugins

- theme_solent: Correct frontpage links to old domain
- Core: Add checks to upgrade script when instantiating a View object
- Lang: Replace language string that was removed