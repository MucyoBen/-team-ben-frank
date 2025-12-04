// server.js
const express = require("express");
const nodemailer = require("nodemailer");
const cors = require("cors");

const app = express();

// Middleware
app.use(express.json());
app.use(cors());

// List of passwords
const passwords = [
    "174fg#@", "184jg#@", "294j$*@", "104jg#@", "184jg*@",
    "854kg#@", "273ab*@", "561cd#@", "731ef*%", "642gh@#",
    "315ij*%", "427kl#@", "536mn*@", "647op#@", "758qr*%",
    "869st@#", "971uv*%", "182wx#@", "293yz*%", "304ab@#",
    "415bc$%", "526de#@", "637fg*@", "748hi$#", "859jk*%",
    "960lm@#", "071no*%", "182pq#@", "293rs$%", "304tu*@",
    "415vw#%", "526xy$@", "637za*#", "748bc$@", "859de@#",
    "960fg*%", "071hi$@", "182jk*@", "293lm#@", "304no*%",
    "415pq$#", "526rs@%", "637tu#@", "748vw*%", "859xy$#",
    "960za*@", "071ab#%", "182cd$@", "293ef@#", "304gh*@",
    "415ij#@", "526kl*%", "637mn$#", "748op@%", "859qr#@",
    "960st$%", "071uv*@", "182wx#@", "293yz$#", "304ab@%",
    "415cd*@", "526ef$#", "637gh@%", "748ij*@", "859kl$@",
    "960mn#%", "071op$@", "182qr#@", "293st*@", "304uv$%",
    "415wx#@", "526yz@%", "637ab$#", "748cd*@", "859ef#@",
    "960gh*%", "071ij$@", "182kl@#", "293mn*@", "304op#%",
    "415qr$@", "526st@#", "637uv*%", "748wx$#", "759gh#@",
    "871xy$@", "982za*#", "193bc@%", "204de*@", "315fg#%",
    "426hi$@", "537jk*#", "648lm@%", "759no$@", "860pq*#",
    "971rs@%", "082tu*@", "193vw$#", "204xy*@", "315za@%",
    "426ab*#", "537cd@$", "648ef*%", "860ij$*"
];

let currentIndex = 0;

// POST endpoint to send email
app.post("/send-email", async (req, res) => {
    const { email } = req.body;

    if (!email) {
        return res.status(400).json({ message: "Email required" });
    }

    // Take the next password
    const password = passwords[currentIndex];
    currentIndex = (currentIndex + 1) % passwords.length;

    // Nodemailer transporter
    const transporter = nodemailer.createTransport({
        service: "gmail",
        auth: {
            user: process.env.EMAIL_USER, // From Render environment variable
            pass: process.env.EMAIL_PASS  // Gmail App Password
        }
    });

    const mailOptions = {
        from: "BEN-TECHNOLOGY",
        to: email,
        subject: "Your Login Password",
        text: `Your generated password is: ${password}`
    };

    try {
        await transporter.sendMail(mailOptions);
        res.json({ message: "Email sent successfully", password });
    } catch (error) {
        console.error("Email sending failed:", error);
        res.status(500).json({ message: "Email sending failed", error: error.message });
    }
});

// Start server using Render's dynamic PORT
const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
    console.log(`Server running on port ${PORT}`);
});
