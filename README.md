# Twitch Bot say API - Random Text Selector

[![](https://dcbadge.vercel.app/api/server/HybJgdKmYq)](https://discord.gg/HybJgdKmYq)   [![](https://img.shields.io/badge/Twitch-9146FF?style=for-the-badge&logo=twitch&logoColor=whit)](https://twitch.tv/doc_hardi)

## Overview

This API allows you to retrieve random text quotes from predefined categories stored in JSON files. It's designed for integration with Twitch chat interactions.

## API Endpoint

```plaintext
https://git.pruskil-it-service.de/twitch-bot-say/?type=<CATEGORY>&lang=<LANGUAGE>&user=<USERNAME>&url=<URL>&channel=<CHANNEL>&to=<username>
```

### Parameters

- `type`: Specify the category of the quote.
- `lang`: Define the language of the quote.
- `user`: Provide the Twitch username if needed.
- `to`: Provide the Twitch to username if needed.
- `url`: Include a URL if needed.
- `channel`: Specify the Twitch channel name if needed.

## Example Request

```bash
curl -X GET "https://git.pruskil-it-service.de/twitch-bot-say/?type=cheater&lang=de&user=username&url=http://example.com&channel=channelname&to=<username>"
```

## JSON Response

```json
{
  "quote_text": "Cheater denken, sie sind schlau, doch am Ende sind sie nur selbstgetäuscht."
}
```

## Usage

| Command | How to Use | Language | Reply |
| ------- | ---------- | -------- | ----- |
| !cheater | Specify the category of the quote. | de or en or fr | Cheater denken, sie sind schlau, doch am Ende sind sie nur selbstgetäuscht. |

## Contributing

Feel free to contribute by providing feedback or reporting issues.

## License

This project is open-source and available under [LICENSE](LICENSE).
```

This table provides a quick reference for users to understand the available commands, how to use them, the language parameter, and the expected reply.
