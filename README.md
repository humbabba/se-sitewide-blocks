# SE Sitewide Block

WordPress plugin that lets you create block-editor content and display it site-wide — with full control over **where**, **when**, and **on which pages** it appears.

## Features

### Insertion locations

Choose one or more built-in locations per block:

| Location | Hook used |
|---|---|
| **Site top** | `wp_body_open` |
| **Before content** | `loop_start` (main query) |
| **After content** | `loop_end` (main query) |
| **Before footer** | `get_footer` |

You can also attach a block to any **custom action hook** by name, with a configurable priority.

### Scheduling

- **Always on** — visible whenever the block is published
- **Date range** — start and/or end date-time
- **Recurring** — pick days of the week, a time window, and optional bounding dates

### Visibility rules

Narrow where a block appears:

- **Page types** — singles (posts, pages, custom post types), archives (category, tag, date, author, CPT, taxonomy), and special pages (front page, blog index, search, 404)
- **Taxonomy terms** — show or hide on specific terms (any public taxonomy), with a tabbed, searchable UI
- **Post IDs** — show or hide on specific posts/pages by ID
- Hide rules override show rules

### Ordering

Drag-and-drop ordering on the admin list screen (powered by SortableJS). The sort order is respected on the front end within each location.

### Preview

Each block has its own preview URL (`/block/{slug}/`) that renders the content with `wp_head`/`wp_footer` for asset loading but without theme header/footer chrome.

## Requirements

- WordPress 6.0+
- PHP 7.4+

## Installation

1. Download or clone this repository into `wp-content/plugins/se-sitewide-block/`
2. Activate the plugin in **Plugins → Installed Plugins**
3. Go to **Sitewide Blocks** in the admin menu to create your first block

## Usage

1. **Add a new Sitewide Block** — use the block editor to create your content
2. **Location** — check one or more insertion points, or add custom hook names
3. **Schedule** — choose Always On, Date Range, or Recurring
4. **Visibility** — optionally restrict to specific page types, terms, or post IDs
5. **Publish** — the block appears on the front end in the selected locations

## License

Open-sourced software licensed under the [MIT license](https://opensource.org/license/MIT).
