
<script>
const gifts = [
    // R - 50%
    {
        rank: "R",
        color: "#78a5f8",
        chance: 50,
        messages: [
            "🎈 Chúc bạn 20/10 xinh đẹp x10, học giỏi x100, ăn hoài không béo!",
            "🌸 Chúc bạn luôn vui vẻ, cười thật nhiều và gặp toàn điều may mắn!",
            "🍓 Chúc bạn ngày càng xinh, tiền đầy túi, tình đầy tim!",
            "🐻 Chúc bạn luôn đáng yêu, ngủ ngon, ăn ngon và không bao giờ buồn!"
        ]
    },

    // SR - 30%
    {
        rank: "SR",
        color: "#b47aff",
        chance: 30,
        messages: [
            "💜 Chúc bạn luôn được yêu thương, hạnh phúc và bình an!",
            "🌷 Mong mọi điều tốt đẹp nhất sẽ đến với bạn trong ngày 20/10!",
            "💌 Chúc nụ cười của bạn luôn rạng rỡ và trái tim luôn ấm áp!",
            "🧸 Chúc bạn gặp được những người chân thành và luôn trân trọng bạn!"
        ]
    },

    // SSR - 15%
    {
        rank: "SSR",
        color: "#ffb52e",
        chance: 15,
        messages: [
            "✨ Chúc bạn xinh đẹp như hoa, hạnh phúc như mơ và thành công rực rỡ!",
            "💖 Mong bạn luôn là phiên bản tuyệt vời nhất của chính mình!",
            "🌟 Chúc mọi ước mơ của bạn đều trở thành hiện thực!",
            "👑 Bạn xứng đáng với những điều tuyệt vời nhất. Chúc bạn 20/10 thật hạnh phúc!"
        ]
    },

    // UR - 5%
    {
        rank: "UR",
        color: "#ff4d87",
        chance: 5,
        messages: [
            "👑 UR SIÊU HIẾM! Chúc bạn cả đời bình an, vạn sự như ý, hạnh phúc viên mãn!",
            "💎 Bạn là phiên bản độc nhất! Chúc bạn luôn tỏa sáng và được yêu thương!",
            "🌈 Chúc bạn gặp đúng người, đúng thời điểm và có một cuộc đời thật rực rỡ!",
            "💝 Đặc quyền UR: Chúc bạn luôn hạnh phúc, mọi điều mong muốn đều dần thành hiện thực!"
        ]
    }
];

let opened = false;

function openGift() {
    if (opened) return;

    opened = true;

    const random = Math.random() * 100;
    let total = 0;
    let selectedGift = gifts[0];

    for (const gift of gifts) {
        total += gift.chance;

        if (random < total) {
            selectedGift = gift;
            break;
        }
    }

    const message = selectedGift.messages[
        Math.floor(Math.random() * selectedGift.messages.length)
    ];

    document.getElementById("rarity").textContent =
        "PHẨM CẤP CỦA BẠN: " + selectedGift.rank;

    document.getElementById("rarity").style.background =
        selectedGift.color;

    document.getElementById("title").textContent =
        selectedGift.rank === "UR" ? "💎 SIÊU PHẨM UR! 💎" :
        selectedGift.rank === "SSR" ? "🌟 CHÚC MỪNG SSR! 🌟" :
        selectedGift.rank === "SR" ? "💜 PHẦN QUÀ SR! 💜" :
        "🎉 Chúc Mừng 20/10! 🎉";

    document.getElementById("wish").textContent = message;

    const heart = document.querySelector(".heart");
    heart.textContent =
        selectedGift.rank === "UR" ? "💖" :
        selectedGift.rank === "SSR" ? "💛" :
        selectedGift.rank === "SR" ? "💜" : "❤️";

    document.getElementById("giftButton").textContent =
        "Đã nhận quà rồi nhé! 🎁";
}
</script>
