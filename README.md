<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="https://github.com/figuren-theater/ft-network-block-patterns">
    <img src="https://raw.githubusercontent.com/figuren-theater/logos/main/favicon.png" alt="figuren.theater Logo" width="100" height="100">
  </a>

  <h1 align="center">figuren.theater | Network Block Patterns</h1>

  <p align="center">
    Replaces block-patterns taken from themes with customized versions for the WordPress Multisite network for puppeteers - <a href="https://figuren.theater">figuren.theater</a>.
    <br /><br /><br />
    <a href="https://meta.figuren.theater/blog"><strong>Read our blog</strong></a>
    <br />
    <br />
    <a href="https://figuren.theater">See the network in action</a>
    •
    <a href="https://mein.figuren.theater">Join the network</a>
    •
    <a href="https://websites.fuer.figuren.theater">Create your own network</a>
  </p>
</div>

## About 

...

* [x] *list closed tracking-issues or `docs` files here*
* [ ] Do you have any [ideas](https://github.com/figuren-theater/ft-network-block-patterns/issues/new) ?

### Background & Motivation

To get rid of some unwanted code within existing patterns from themes, this plugin replaces them with similar, slightly modified ones.

Which themes are part of this *replacement-plugin* is slowly following the themes included in the [ft-themes meta-package](https://github.com/figuren-theater/ft-themes) repository.

### Install

1. Install via command line
    ```sh
    composer require figuren-theater/ft-network-block-patterns
    ```

## Usage

This plugin has no settings or filters. Just use block-patterns like normal, nothing has changed, except some patterns.

### Replacing patterns from themes

By purpose not all patterns of a theme get replaced. 

Currently patterns from the following themes are included in the replacement:

* [Bright-mode](https://wordpress.org/themes/bright-mode/)
* [Oaknut](https://wordpress.org/themes/oaknut/)
* [Pendant](https://wordpress.org/themes/pendant/)
* [Twentytwentytwo](https://wordpress.org/themes/twentytwentytwo/)


### Additional block-patterns loaded

Accompaniying the core functionality of the plugin, some **new block-patterns** are getting added. They could be understood as a more focused version of the (within this plugin) **disabled core block-patterns**.

## Built with & uses

  - [dependabot](/.github/dependabot.yml)
  - [code-quality](https://github.com/figuren-theater/code-quality/)
     A set of status checks to ensure high and consitent code-quality for the figuren.theater platform.

## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request


## Versioning

We use [Semantic Versioning](http://semver.org/) for versioning. For the versions
available, see the [tags on this repository](https://github.com/figuren-theater/ft-network-block-patterns/tags).

## Authors

  - **Carsten Bach** - *Provided idea & code* - [figuren.theater/crew](https://figuren.theater/crew/)

See also the list of [contributors](https://github.com/figuren-theater/ft-network-block-patterns/contributors)
who participated in this project.

## License

This project is licensed under the **GPL-3.0-or-later**, see the [LICENSE](/LICENSE) file for
details

## Acknowledgments

  - [altis](https://github.com/search?q=org%3Ahumanmade+altis) by humanmade, as our digital role model and inspiration
  - [@roborourke](https://github.com/roborourke) for his clear & understandable [coding guidelines](https://docs.altis-dxp.com/guides/code-review/standards/)
  - [python-project-template](https://github.com/rochacbruno/python-project-template) for their nice template->repo renaming workflow
