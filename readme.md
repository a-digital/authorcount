# authorcount
Core Purpose:

Returns the number of entries for each author within a channel.

channel_id is a required parameter

Basic Usage Example:

```
{exp:authorcount channel_id="6"}
	{name} ({count})
{/exp:authorcount}
```
Returns
Andrew Armitage (4)
Matt Shearing (7)

We built this for our blog to not only track the number of entries per person. But to also use this to then filter the list to show only that members posts.