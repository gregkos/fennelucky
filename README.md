# This project is in its early alpha stages

You are more than welcome to follow along and even contribute, but keep in mind that everything is still extremely unstable and things might change drastically without warning. At the same time, do not expect thorough documentation and support.

---

## Environment

- PHP 8.2.x
- Composer 2.x
- MySQL 8.x
- Some sort of server to serve this
- Some sort of mail catcher for email

Most of these are covered by using [Sail](https://docs.laravel.com/10.x/sail), but feel free to use whatever you prefer.

## Development

- The project has tests, static analysis, and enforced style guides.
- To support that `pest`, `phpstan`, and `pint` respectively are installed as dev dependencies.
  - `./vendor/bin/pest` to run tests
  - `./vendor/bin/phpstan` to perform static analysis
  - `./vendor/bin/pint` to lint and fix your code
- Use them frequently, or better yet set up your IDE to do it for you.
- PRs that raise errors in any of these tools will not be merged.
- Always add tests when you introduce new features or fixes.

## High level MVP

**NOTE** — _This will intentionally be entirely API-only. There is no UI. Feel free to build your own or interact with the API directly to play._

The intent is to provide a game where you take care of one or more virtual pets by meeting their needs. During the first phase of development the target is to have the following features:

- Register/login (Similar to passwordless logins, you enter your email and receive a 7-day access token) 
- Create a pet (only requires a name)
- Get your pet's status/needs (food, rest, play)
- Perform actions (feed, put to bed, play a game)

The plan is to add more complexity and some form of multiplayer or leaderboards in subsequent phases, based on feedback.

## License

This is a free and open-source game. A hosted version will be provided, along with a basic guide to host your own server. The exact license has not yet been determined. If you are worried over copyright concerns please refrain from using this code until this section is updated to your satisfaction.
