# sc-test
A coding exercise to assess the competency of candidates.

## About us
The company has a very competent team of software engineers that develops high quality and responsive SaaS applications for many clients around the globe.

## Context
Thanks for applying to Full Stack Developer position at our company.

To be able to find right talents, we recommend candidates to finish the following coding exercise.

Thanks for your collaboration. We are looking forward to have you on board and share a great experience together. 


## Coding exercise

We'd like you to use an API from  [apilist.fun](https://apilist.fun)  to make a very simple application based around it showcasing all of below technologies:

1.  HTML, CSS, and JavaScript (Extra points for Vue.js, React, or Angular2)
2.  Programming languages (PHP, Node.JS)
3.  Databases (Relational & Non-Relational)
4.  Version control (Git)
5.  Deployment and hosting (any cloud provider - extra points for AWS and automated deployment)

Please feel free to select any of the above platforms that you are most comfortable with, if you are not comfortable with the technologies listed, please speak to your company contact to see if you are able to use an alternative.

Once you have completed the exercise either email us a link to your forked repo or create a pull request to this repository. Please don’t include any  `node_modules`  folders, we'll regenerate dependencies as part running the code.

If we can’t figure out how to get your application running, it’s been a waste of your time, so please include any instructions we might need to launch it in the `instructions.md` file.

If you are hosting the code yourself please also provide us with a link or instructions on how to access it.

## Considerations
Please take the following into the consideration as much as you can while developing the solution:

- Simplicity
- Reusability
- Scalability
- Performance
- Usability
- Code quality
- Design patterns and best practices

We think this task should take about 3-5 hours. We respect your time far too much to ask for more than that. If you don’t finish, that’s fine, we’ll talk through what you have completed.

Please ask any questions you may have of your company contact. This is not a test of your ability to understand our written instructions, it really is just an opportunity to write some code.

## To run locally

Have [docker](https://docs.docker.com/engine/install/) & [docker-compose](https://docs.docker.com/compose/install/) installed on your operating system.

```bash
cp .env.example .env
make dev && make backend-migrate && make backend-seed
```

## To run browser tests

```bash
vendor/bin/sail dusk
```

View browser test code: [/tree/develop/tests/Browser](https://github.com/kkamara/ecommerce/tree/develop/tests/Browser)

## Misc

The `Makefile` for this project contains useful commands for a Laravel application and can be found at [laravel-makefile](https://github.com/kkamara/laravel-makefile).

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[BSD](https://opensource.org/licenses/BSD-3-Clause)

