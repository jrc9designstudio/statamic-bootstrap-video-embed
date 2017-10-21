# Bootstrap Video Embed for Statamic 2
*Requirements:* Statamic v2.x, Statamic Video Embed v2.x  
*Version:* 1.0.0

### What is this?
A tag that adds your video including the Bootstrap Responsive Embed Tags.  

### Installation
- Install and configure [Statamic Video Embed](https://github.com/jrc9designstudio/statamic-video-embed).
- Rename the folder `BootstrapVideoEmbed` and copy it to your `site/addons` folder.

### Tag
- Assuming your video embed field is `video`.
```
{{ bootstrap_video_embed src='{video:url}' height='{video:height}' width='{video:width}' }}
```
- If you want to overide the default settings (from the Video Embed addon).
```
{{ bootstrap_video_embed src='{video:url}' height='{video:height}' width='{video:width}' autoplay='true' loop='true' api='true' showinfo='false' controls='false' }}
```

<a target='_blank' rel='nofollow' href='https://app.codesponsor.io/link/eNH4J7YAub4Y19PG8yjyuzLu/jrc9designstudio/statamic-bootstrap-video-embed'>
  <img alt='Sponsor' width='888' height='68' src='https://app.codesponsor.io/embed/eNH4J7YAub4Y19PG8yjyuzLu/jrc9designstudio/statamic-bootstrap-video-embed.svg' />
</a>

Made with ❤️ by [JRC9 Design Studio](https://jrc9.ca)
