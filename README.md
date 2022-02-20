# Short Rest
## About
Short Rest is a framework to help streamline development of custom APIs using WordPress.

It is well-documented that performance of the native WordPress REST API is not quite as performant as it could be, in
part because the REST service in core requires the application to fully bootstrap itself on every request. Developers
have worked around this by creating their own REST APIs that load using WordPress's not-as-well-documented `SHORTINIT`
process, a bootstrap flow that loads the bare minimum files. This approach results in much faster response times, but
requires quite a bit of additional scaffolding and knowledge of which WordPress files to load on a given request.

This framework aims to standardize some of the scaffolding flow and to provide a mechanism for loading WordPress 
dependencies more easily, so developers can get back to building fast APIs instead of wrestling with documentation and
WordPress internals.
