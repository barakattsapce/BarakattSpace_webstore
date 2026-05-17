# API Documentation

Base URL:

```txt
http://127.0.0.1:8000/api
```

---

# About Page API

## Get About Page Data

### Endpoint

```http
GET /about
```

### Response

```json
{
  "hero_section": {
    "title": "About Barakaat",
    "description": "Barakaat is a platform...",
    "image": "about.png"
  },
  "cards": [
    {
      "id": 1,
      "title": "Our Mission",
      "description": "To provide high-quality websites"
    }
  ]
}
```

---

# Admin About API

## Get Admin About Data

### Endpoint

```http
GET /admin/about
```

---

## Update Hero Section

### Endpoint

```http
PUT /admin/about/hero
```

### Request Body

```json
{
  "title": "Updated Title",
  "description": "Updated Description",
  "image": "hero.png"
}
```

### Response

```json
{
  "message": "Hero section updated successfully"
}
```

---

## Create Card

### Endpoint

```http
POST /admin/about/cards
```

### Request Body

```json
{
  "title": "Our Support",
  "description": "24/7 Support",
  "icon": "support.png"
}
```

---